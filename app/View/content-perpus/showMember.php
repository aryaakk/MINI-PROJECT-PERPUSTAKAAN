<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW MEMBER</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= \Staditek\TH\App\Core\Router::url('/assets/css/styleShowMember.css') ?>">
</head>

<body>
    <section id="content">
        <div class="wrapper-side">
            <div class="sidebar">
                <div class="header-side">
                    <p>LIBPUS</p>
                </div>
                <hr class="row-side">
                <div class="content-side">
                    <ul>
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/dashboard') ?>">Dashboard</a></li>
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/ShowBuku') ?>">Buku</a></li>
                        <li><a class="active" href="<?= \Staditek\TH\App\Core\Router::url('/ShowMember') ?>">Member</a></li>
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/ShowLibrarian') ?>">Librarian</a></li>
                    </ul>
                </div>
                <div class="footer-side">
                    <a href="<?= \Staditek\TH\App\Core\Router::url('/Logout')?>">Logout</a>
                </div>
            </div>
        </div>
        <div class="main">
            <div class="header">
                <div class="brand">
                    <div class="head">
                        <span>Pages / <b>Show Member</b></span>
                    </div>
                    <div class="ket">
                        <span>Show Member</span>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card-header">
                    <div class="card-show">
                        <div class="head">
                            <i class='bx bxs-group member'></i>
                            <div class="ket">
                                <p>SHOW MEMBER</p>
                                <div class="butt">
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/ShowMember') ?>">SHOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-add">
                        <div class="head">
                            <i class='bx bxs-user-plus addMem'></i>
                            <div class="ket">
                                <p>ADD MEMBER</p>
                                <div class="butt">
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/AddMember') ?>">ADD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="wrapper">
                        <div class="header">
                            <span>MEMBER DATA</span>
                        </div>
                        <div class="wrapper-table">
                            <table cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NIK</th>
                                        <th>NAME</th>
                                        <th>PHONE</th>
                                        <th>ADDRESS</th>
                                        <th>BORN PLACE</th>
                                        <th>BORN DATE</th>
                                        <th>GENDER</th>
                                        <th>COUNTRY</th>
                                        <th>NATIONALITY</th>
                                        <th>STATUS</th>
                                        <th>UPDATED AT</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($data['member'] as $key => $mem) {
                                        if($mem->updated_at == null){
                                            $updated = "NONE";
                                        }else{
                                            $updated = $mem->updated_at;
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $key + 1 ?></td>
                                            <td><?= $mem->nik ?></td>
                                            <td><?= $mem->name ?></td>
                                            <td><?= $mem->phone ?></td>
                                            <td><?= $mem->address ?></td>
                                            <td><?= $mem->born_place ?></td>
                                            <td><?= $mem->born_date ?></td>
                                            <td><?= $mem->gender ?></td>
                                            <td><?= $mem->country ?></td>
                                            <td><?= $mem->nationality ?></td>
                                            <td><?= $mem->status ?></td>
                                            <td><?= $updated ?></td>
                                            <td>
                                                <a class="edit" href="<?= \Staditek\TH\App\Core\Router::url("/ShowEditBook/$mem->book_id") ?>">Edit</a>
                                                <a onclick="return confirm('YAKIN HAPUSS??')" class="hapus" href="<?= \Staditek\TH\App\Core\Router::url("/deleteMember/$mem->id_member")?>">Hapus</a>
                                                <a class="ext" href="<?= \Staditek\TH\App\Core\Router::url("/ShowEditBook/$mem->book_id") ?>">ExtMem</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>