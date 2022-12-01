<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD LIBRARIAN</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= \Staditek\TH\App\Core\Router::url('/assets/css/styleAddLibrarian.css') ?>">
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
                        <li><a href="<?= \Staditek\TH\App\Core\Router::url('/ShowMember') ?>">Member</a></li>
                        <li><a class="active" href="<?= \Staditek\TH\App\Core\Router::url('/ShowLibrarian') ?>">Librarian</a></li>
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
                        <span>Pages / <b>Add Librarian</b></span>
                    </div>
                    <div class="ket">
                        <span>Add Librarian</span>
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
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/ShowLibrarian') ?>">SHOW</a>
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
                                    <a href="<?= \Staditek\TH\App\Core\Router::url('/AddLibrarian') ?>">ADD</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="wrapper">
                        <div class="header">
                            <span>ADD LIBRARIAN DATA</span>
                        </div>
                        <form action="<?= \Staditek\TH\App\Core\Router::url('/saveLibrarian') ?>" method="POST">
                            <div class="formGrup">
                                <label for="">ID CARD</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="cardid" id="" value="OFC00">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">USERNAME</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="username" id="" placeholder="Enter Username">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">GENDER</label>
                                <div class="form-inp">
                                    <select class="inp" name="gender" id="">
                                        <option>PILIH GENDER</option>
                                        <optgroup>
                                            <option value="MALE">MALE</option>
                                            <option value="FEMALE">FEMALE</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">ALAMAT</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="alamat" id="" placeholder="Enter Alamat">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">EMAIL</label>
                                <div class="form-inp">
                                    <input class="inp" required type="email" name="email" id="" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">PHONE</label>
                                <div class="form-inp">
                                    <input class="inp" required type="number" name="phone" maxlength="15" id="" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">PASSWORD</label>
                                <div class="form-inp">
                                    <input class="inp" required type="password" name="password" id="" placeholder="Enter New Password">
                                </div>
                            </div>
                            <div class="formButt">
                                <input class="sub" type="submit" name="" id="" value="Savee">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="<?= \Staditek\TH\App\Core\Router::url('/assets/js/main.js') ?>"></script>
</body>

</html>