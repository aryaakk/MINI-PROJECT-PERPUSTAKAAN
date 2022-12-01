<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOW MEMBER</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= \Staditek\TH\App\Core\Router::url('/assets/css/styleAddMember.css') ?>">
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
                        <span>Pages / <b>Add Member</b></span>
                    </div>
                    <div class="ket">
                        <span>Add Member</span>
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
                            <span>ADD MEMBER DATA</span>
                        </div>
                        <form action="<?= \Staditek\TH\App\Core\Router::url('/saveLibrarian') ?>" method="POST">
                            <div class="formGrup">
                                <label for="">NIK</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="nik" id="" placeholder="Enter Nik">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">NAME</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="name" id="" placeholder="Enter Name">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">PHONE</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="phone" id="" placeholder="Enter Phone">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">ADDRESS</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="address" id="" placeholder="Enter Address">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">BORN PLACE</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="born_place" id="" placeholder="Enter Born Place">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">BORN DATE</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="born_date" id="" placeholder="Enter Born Date">
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
                                <label for="">COUNTRY</label>
                                <div class="form-inp">
                                    <input class="inp" required type="text" name="country" id="" placeholder="Enter Country">
                                </div>
                            </div>
                            <div class="formGrup">
                                <label for="">NATIONALITY</label>
                                <div class="form-inp">
                                    <select class="inp" name="nationality" id="">
                                        <optgroup>
                                            <option selected value="WNI">WNI</option>
                                            <option value="WNA">WNA</option>
                                        </optgroup>
                                    </select>
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
</body>

</html>