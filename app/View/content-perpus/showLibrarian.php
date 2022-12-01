<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW LIBRARIAN</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= \Staditek\TH\App\Core\Router::url('/assets/css/styleShowLibrarian.css')?>">
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
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/dashboard')?>">Dashboard</a></li>
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/ShowBuku')?>">Buku</a></li>
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/ShowMember')?>">Member</a></li>
                        <li><a class="active" href="<?= \Staditek\TH\App\Core\Router::url('/ShowLibrarian')?>">Librarian</a></li>
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
                        <span>Pages / <b>Show Librarians</b></span>
                    </div>
                    <div class="ket">
                        <span>Show Librarians</span>
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="card-header">
                    <div class="card-show">
                        <div class="head">
                            <i class='bx bxs-user-badge officer'></i>
                            <div class="ket">
                                <p>SHOW LIBRARIAN</p>
                                <div class="butt">
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/ShowLibrarian')?>">SHOW</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-add">
                        <div class="head">
                            <i class='bx bxs-user-rectangle addOff'></i>
                            <div class="ket">
                                <p>ADD LIBRARIAN</p>
                                <div class="butt">
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/AddLibrarian')?>">ADD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="wrapper">
                        <div class="header">
                            <span>USER LIBRARIAN DATA</span>
                        </div>
                        <table cellspacing="0">
                            <thead>
                                <tr>
                                    <th width="10">No</th>
                                    <th width="10">Username</th>
                                    <th width="200">Email</th>
                                    <th width="150">Alamat</th>
                                    <th width="140">Created At</th>
                                    <th width="150">Updated At</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach($data['librarian'] as $key=>$lib){
                                    if($lib->updated_at == null){
                                        $updated = "NONE";
                                    }else{
                                        $updated = $lib->updated_at;
                                    }
                                    ?>
                                    <tr>
                                        <td><?= $key+1?></td>
                                        <td><?= $lib->username?></td>
                                        <td><?= $lib->email?></td>
                                        <td><?= $lib->alamat?></td>
                                        <td><?= $lib->created_at?></td>
                                        <td><?= $updated?></td>
                                        <td>
                                            <a class="edit" href="<?= \Staditek\TH\App\Core\Router::url("/ShowEditLibrarian/$lib->id_librarian")?>">Edit</a>
                                            <a onclick="return confirm('YAKIN HAPUSS??')" class="hapus" href="<?= \Staditek\TH\App\Core\Router::url("/deleteLibrarian/$lib->id_librarian")?>">Hapus</a>
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
    </section>
</body>

</html>