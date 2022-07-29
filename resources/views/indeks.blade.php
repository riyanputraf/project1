<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- CSS-->
    @include('layouts.stylesheet')
   
    <title>Web Modul 2</title>
    
</head>
<body>
    <!--Navbar-->
    @include('layouts.navbar')
    
    <!--End Navbar-->

    <!--Content-->
    <div class="containers">
        <div class="rows">
            <div class="col-9">
                <h1>Hot Books</h1><hr>
                <div class="rows">
                    <div class="col-6">
                        <div class="cards">
                            <div class="card-image-top">
                                <img src="{{asset('laskar_pelangi.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Laskar Pelangi</h3></a>
                                <p class="card-text">Ini isi konten dari buku</p>
                                <span class="card-author">Andrea Hirata</span>
                            
                            </div>
                        </div>                        
                    </div>
                    <div class="col-6">
                        <div class="cards">
                            <div class="card-image-top">
                                <img src="{{asset('edensor.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Edensor</h3></a>
                                <p class="card-text">Ini isi konten dari buku</p>
                                <span class="card-author">Andrea Hirata</span>
                            </div>
                        </div>                        
                    </div>
                </div>                
            </div>
            <div class="col-3">
                <div class="rows">
                    <div class="col-12">
                        <div class="cards">
                            <div class="card-content">
                                <h3 class="card-title">search</h3><hr>
                                <div class="searchBar">
                                    <input id="searchQueryInput" type="text" name="searchQueryInput" placeholder="Search" value="" />
                                    <button id="searchQuerySubmit" type="submit" name="searchQuerySubmit">
                                        <svg style="width:24px;height:24px" viewBox="0 0 24 24"><path fill="#666666" d="M9.5,3A6.5,6.5 0 0,1 16,9.5C16,11.11 15.41,12.59 14.44,13.73L14.71,14H15.5L20.5,19L19,20.5L14,15.5V14.71L13.73,14.44C12.59,15.41 11.11,16 9.5,16A6.5,6.5 0 0,1 3,9.5A6.5,6.5 0 0,1 9.5,3M9.5,5C7,5 5,7 5,9.5C5,12 7,14 9.5,14C12,14 14,12 14,9.5C14,7 12,5 9.5,5Z" /></svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="cards">
                            <div class="card-content">
                                <h3 class="card-title">Most Searched</h3><hr>
                                <ul class="card-category mb-0">
                                    <li><a href="#!">Horror</a></li>
                                    <li><a href="#!">Motivation</a></li>
                                    <li><a href="#!">Romance</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-9">
                <h1>All Books</h1><hr>
                <div class="rows">
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="{{asset('daruma_san.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Daruma-san</h3></a>
                                <p class="card-text">Ini isi konten dari buku</p>
                                <span class="card-author">Angga Wijaya</span>
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="{{asset('padang_bulan.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Padang Bulan</h3></a>
                                <p class="card-text">Ini isi konten dari buku</p>
                                <span class="card-author">Andrea Hirata</span>
                                
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="{{asset('charlie.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Charlie Can We Play ?</h3></a>
                                <p class="card-text">Ini isi konten dari buku</p>
                                <span class="card-author">Nur Hatika</span>
                                
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="{{asset('ghost.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Ghost Dormitory </h3></a>
                                <p class="card-text">Ini isi konten dari buku</p>
                                <span class="card-author">Supriyadi</span>
                                
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="{{asset('ayah.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Ayah</h3></a>
                                <p class="card-text">Ini isi konten dari buku</p>
                                <span class="card-author">Mulawarman</span>
                                
                            </div>
                        </div>                        
                    </div>
                    <div class="col-4">
                        <div class="cards">
                            <div class="card-image">
                                <img src="{{asset('gone.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card-content">
                                <a href=""><h3 class="card-title">Gone</h3></a>
                                <p class="card-text">Ini isi konten dari buku</p>
                                <span class="card-author">Kertanegara</span>
                                
                            </div>
                        </div>                        
                    </div>                    
                </div> 
               <!--  <div class="pagination">
                    <li class="btn prev"><span><i class="fas fa-angle-left"></i>Prev</span></li>
                    <li class="numb active"><span>1</span></li>
                    <li class="numb"><span>2</span></li>
                    <li class="dots"><span>...</span></li>
                    <li class="numb"><span>4</span></li>
                    <li class="numb"><span>5</span></li>
                    <li class="dots"><span>...</span></li>
                    <li class="numb"><span>7</span></li>
                    <li class="btn next"><span>Next <i class="fas fa-angle-right"></i></span></li>

                </div> -->
                <div class="containers" style="margin-top:0">
                    <nav aria-label="Pagination">
                        <hr class="my-0" />
                        <ul class="pagination justify-content-center my-4">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true"> << </a></li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                            <li class="page-item"><a class="page-link" href="#!">2</a></li>
                            <li class="page-item"><a class="page-link" href="#!">3</a></li>
                            <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                            <li class="page-item"><a class="page-link" href="#!">15</a></li>
                            <li class="page-item"><a class="page-link" href="#!"> >> </a></li>
                        </ul>
                    </nav>
                </div>                              
            </div>            
        </div>
    </div>

    <!--End Content-->

    <!--Footer-->

    @include('layouts.footer')
    
    <!--End Footer-->
</body>
</html>