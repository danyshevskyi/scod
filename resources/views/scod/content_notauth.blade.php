<div class="container d-flex justify-content-between px-4 1bb align-items-center mt-3">
        
        <div class="text-center 1me-3 1bb pt-2">
                <a href="https://dov.pp.ua/scod/" class="text-decoration-none text-black">
                    <h5>SCOD CMD-V4</h5>
                </a>
        </div>

        <div class="col-auto">
            <button type="button"
                    class="btn btn-outline-dark 1border-0 1border-secondary 1text-primary 1bb
                    text-decoration-none 1fs-5 1bb"
                    data-bs-toggle = "modal"
                    data-bs-target = "#mod_about">About
            </button>        
        </div>
</div>

<!-- body -->
<div class="bb1 vertical-center text-center mt-3">
    <div class="col-12">
        <div class="col mt-4 fs-4 px-3" style="font-family: Sofia, sans-serif;">
            Поиск ошибок для контроллера CMD-V4
        </div>   
    </div>
</div>
<!-- /body -->

<!-- footer -->
<div class="container fixed-bottom 1bb pb-3 1bb mx-auto" style="max-width: 500px">
    <div class="1mx-auto 1bb mx-2">

    <a class="btn btn-outline-dark col-12 fs-5 rounded-5 py-2" href="login" role="button">Sign in</a>


    <!-- <button type="button"
                class="btn btn-outline-dark col-12 fs-5 rounded-5 py-2"
                data-bs-toggle = "modal"
                data-bs-target = "#mod_entry"
                onclick = "pressLogin()">
                Вход
        </button> -->

    </div>

    <div class="mx-2 mt-3 mb-2 1bb">

    <a class="btn btn-dark  col-12 fs-5 rounded-5 py-2" href="register" role="button">Registrated</a>
    <!-- <button type="button"
                class="btn btn-dark  col-12 fs-5 rounded-5 py-2"
                data-bs-toggle = "modal"
                data-bs-target = "#mod_entry"
                onclick = "pressReg()">
                Регистрация
        </button> -->
    </div>

    <a class="text-decoration-none text-black" href="https://www.linkedin.com/in/danyshevskyi/" target="blank"> 
    <div class="text-center mt-3" style="font-size: 13px;">Oleksii Danyshevskyi &copy; 2024 
       
    <i class="bi bi-linkedin"></i></div>
    </a>
</div>
<!-- /footer -->

@include('scod.mod.mod_entry')