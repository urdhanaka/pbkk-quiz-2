<?php

namespace App\Controllers;

use App\Models\UserModel;

class UserController extends BaseController
{
    protected $userModel;
    public function __construct()
    {
        $this->userModel = new UserModel();
    }


    public function index()
    {
        $data = [
        'title' => 'User',
        'user' => $this->userModel->findAll()
        ];

        return view('user/index', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate(
            [
            'username' => [
            'rules' => 'required',
            'errors' => [
            'required' => '{field} user harus diisi.',
            'is_unique' => '{field} user sudah terdaftar.'
            ]
            ],
            'password' => [
            'rules' => 'required|min_length[8]',
            'errors' => [
            'required' => '{field} user harus diisi.',
            'min_length' => '{field} user minimal 8 karakter.'
            ]
            ],
            'email' => [
            'rules' => 'required|valid_email',
            'errors' => [
            'required' => '{field} user harus diisi.',
            'valid_email' => '{field} user harus valid.',
            'is_unique' => '{field} user sudah terdaftar.'
            ]
            ],
            'name' => [
            'rules' => 'required',
            'errors' => [
            'required' => '{field} user harus diisi.'
            ]
            ],
            ]
        )
        ) {
            return redirect()->to('/register')->withInput();
        }
        $this->userModel->save(
            [
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
            'email' => $this->request->getVar('email'),
            'name' => $this->request->getVar('name'),
            'role' => 'user'
            ]
        );
        session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
        return redirect()->to('/login');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('pesan', 'Data berhasil dihapus.');
        return redirect()->to('/');
    }

    public function auth()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $this->userModel->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if ($verify_pass) {
                $ses_data = [
                'id'       => $data['id'],
                'username'     => $data['username'],
                'email'    => $data['email'],
                'name' => $data['name'],
                'role' => $data['role'],
                'logged_in'     => true
                ];

                $this->setUserSession($ses_data);
                if ($data['role'] == 'admin') {
                    return redirect()->to('/admin');
                } else {
                    return redirect()->to('/');
                }
            } else {
                session()->setFlashdata('pesan', 'Password salah.');
                return redirect()->to('/login');
            }
        } else {
            session()->setFlashdata('pesan', 'Username tidak terdaftar.');
            return redirect()->to('/login');
        }
    }

    private function setUserSession($user)
    {
        $data = [
        'id' => $user['id'],
        'name' => $user['name'],
        'username' => $user['username'],
        'email' => $user['email'],
        'isLoggedIn' => true,
        "role" => $user['role'],
        ];
        // dd($data);
        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
