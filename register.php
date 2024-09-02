<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Form Register</title>
                                <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <style>::-webkit-scrollbar {
                                  width: 8px;
                                }
                                /* Track */
                                ::-webkit-scrollbar-track {
                                  background: #f1f1f1; 
                                }
                                 
                                /* Handle */
                                ::-webkit-scrollbar-thumb {
                                  background: #888; 
                                }
                                
                                /* Handle on hover */
                                ::-webkit-scrollbar-thumb:hover {
                                  background: #555; 
                                } body{background-color:#FFEBEE}.card{width:400px;background-color:#fff;border:none;border-radius: 12px}label.radio{cursor: pointer;width: 100%}label.radio input{position: absolute;top: 0;left: 0;visibility: hidden;pointer-events: none}label.radio span{padding: 7px 14px;border: 2px solid #eee;display: inline-block;color: #039be5;border-radius: 10px;width: 100%;height: 48px;line-height: 27px}label.radio input:checked+span{border-color: #039BE5;background-color: #81D4FA;color: #fff;border-radius: 9px;height: 48px;line-height: 27px}.form-control{margin-top: 10px;height: 48px;border: 2px solid #eee;border-radius: 10px}.form-control:focus{box-shadow: none;border: 2px solid #039BE5}.agree-text{font-size: 12px}.terms{font-size: 12px;text-decoration: none;color: #039BE5}.confirm-button{height: 50px;border-radius: 10px}</style>
                                </head>
                                <body className='snippet-body'>
                                <div class="container mt-5 mb-5 d-flex justify-content-center">                                 
    <div class="card px-1 py-4">
        <div class="card-body">
        <center class="h2 card-title mb-3">REGISTER</center>
        <form action="proses_register.php" method="post">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="E-mail"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="password" placeholder="Password"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="NIK"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Nama"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <textarea class="form-control" type="text" placeholder="Alamat"></textarea> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <select name="gender" class="form-control">
                            <option></option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="No.Tlp"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <select name="id_jabatan" class="form-control">
                            <option></option>
                            <?php 
                            include 'koneksi.php';
                            $qry_jabatan=mysqli_query($conn,"select * from tabel_jabatan");
                            while ($data_jabatan=mysqli_fetch_array($qry_jabatan)) {
                                echo '<option value=">'.$data_jabatan['id'].'">'.$data_jabatan['nama_jabatan'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="agree-text">By Registering this appointment you agree to the</small> <a href="#" class="terms">Terms & Conditions</a> </div> <input type="submit" name="confirm" value="Confirm" class="btn btn-primary btn-block confirm-button">
            </form>
        </div>
    </div>
                                </div>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript' src='#'></script>
                                <script type='text/javascript'></script>
                                <script type='text/javascript'>var myLink = document.querySelector('a[href="#"]');
                                myLink.addEventListener('click', function(e) {
                                  e.preventDefault();
                                });</script>
                            
                                </body>
                            </html>