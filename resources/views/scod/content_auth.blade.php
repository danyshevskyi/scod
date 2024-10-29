
<div class="container 1header d-flex justify-content-between px-4 1bb align-items-center mt-3">

  <div class="text-center pt-2">
          <a href="https://dov.pp.ua/scod/" class="text-decoration-none text-black">
            <h5>SCOD for CMD-V4</h5>
          </a>
  </div>

    <div class="col-auto 1bb">
         
    <button type="button"
                    class="btn btn-outline-dark 1border-0 1border-secondary 1text-primary 1bb
                    text-decoration-none 1fs-5 1bb"
                    data-bs-toggle = "dropdown"
                    1data-bs-target = "dropdown">Menu
            </button>    
    
          <ul class="dropdown-menu">
        <li class="dropdown-item fw-semibold" id="email">{{ Auth::user()->email }}</li>
            <li><hr class="dropdown-divider"></li>

            <li class="dropdown-item px-0">
                        <a class="btn btn-link text-decoration-none text-start text-black col-12"
                                href="{{ $_SERVER['APP_URL'] }}/profile" role="button">
                                        <i class="bi bi-person ps-1 pe-2 fs-5"></i>Profile</a>
            </li>

            <li class="dropdown-item px-0">
                    <buttom type="buttom"
                            class="btn btn-link text-decoration-none text-start text-black col-12"
                            data-bs-toggle = "modal"
                            data-bs-target = "#mod_review">
                            <i class="bi bi-pen ps-1 pe-2"></i>Contact us
                    </buttom>
                
                </li>
                <li class="dropdown-item px-0">
                    <buttom type="buttom"
                            class="btn btn-link text-decoration-none text-start text-black col-12"
                            data-bs-toggle = "modal"
                            data-bs-target = "#mod_about">
                            <i class="bi bi-info-circle ps-1 pe-2"></i>About
                    </buttom>
                </li>
                  


                

                <li><hr class="dropdown-divider"></li>
                
                <!-- <li><a class="dropdown-item" onclick="butEnd()"><i class="bi bi-door-open pe-2"></i>Sign out</a></li> -->
            
                <li class="dropdown-item px-0">
                            <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();"
                                                class="text-decoration-none text-black ps-3">
                                                
                               <i class="bi bi-door-open pe-1"></i>
                               Sign out
                            </x-dropdown-link>
                        </form>        
                </li>
        
        
        
        </ul>
    </div>
</div>

<hr>

<div class="container mt-5 px-4">
<div class="row 1d-flex 1justify-content-center 1mt-5 1bb py-3 mx-auto"
  style="max-width: 500px;">


</div>

<!-- footer -->
<div class="mx-auto fixed-bottom pb-3" style="max-width: 1000px">
    <a class="text-decoration-none text-black" href="https://www.linkedin.com/in/danyshevskyi/" target="blank"> 
    <div class="text-center mt-3" style="font-size: 13px;">Oleksii Danyshevskyi &copy; 2024 
    <i class="bi bi-linkedin"></i>
</div>
</a>
</div>

<script type="text/javascript">

</script>
