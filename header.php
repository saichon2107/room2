<?php session_start(); ?>
<div class="mt-3 p-3 bg-primary text-center text-white fs-2">
    ระบบฐานข้อมูลห้องพัก
</div>

<nav class="nav">
    <a class="nav-link " aria-current="page" href="index.php">หน้าหลัก</a>
    
    <a class="nav-link" href="showroom.php">แสดงข้อมูลห้อง</a>
    <?php if ($_SESSION['u'] == null || $_SESSION['p'] == null) { ?>
        <!-- <a class="nav-link" href="login.html">Login</a> -->
        <span class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Login</span>
        <!-- Button trigger modal -->
        <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Launch demo modal
        </button> -->

        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">เข้าสู่ระบบ</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="chklogin.php" method="GET">
                            <div class="row mb-3">
                                    <label for="username" class="col-sm-2 text-capitalize">Username</label>
                                    <div class="col-sm-6">
                                        <input type="text" autocomplete="off" class="form-control" required name="username" id="username" value="" />
                                    </div>
                            </div>
                            <div class="row mb-3">
                                <label for="password" class="col-sm-2">Password</label>
                                <div class="col-sm-6">
                                    <input type="password" autocomplete="off" class="form-control" required name="password" id="password" value="" />
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">reset</button>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                </form>
            </div>
        </div>

    <?php } else { ?>
        <a class="nav-link" href="inputlist.php">เพิ่มข้อมูลผู้พัก</a>
        <a class="nav-link" href="inputroom.php">เพิ่มข้อมูลห้อง</a>
        <a class="nav-link" href="logout.php">Logout</a>
        <span class="navbar-text text-danger"> สวัสดีคุณ <?php echo $_SESSION['u']; ?></span>
        </button>
    <?php }  ?>
</nav>