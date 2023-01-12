<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    <div class="header">
      <div class="d-flex justify-content-between align-items-center">
        <div>
          <a href="{{ URL::route('dashboard'); }}"><img class="" src="images/logo-thrifty.svg" alt="" /></a>
        </div>

        <div>
          <div class="kotak-cari">
            <input
              class="text-cari"
              type="text"
              placeholder="Cari di Thrifty"
            />
            <img
              class="icon-search"
              src="images/icon-search.svg"
              alt=""
              usemap="#usemap"
            />
            <map name="usemap">
              <area shape="default" coords="" href="#" alt="" />
            </map>
          </div>
        </div>

        <div class="d-flex justify-content-around align-items-center">
          <div class="">
            <a href="{{ URL::route('daftarjual'); }}"><button type="button" class="btn btn-success" style="border-radius: 5px;border-color: white; border-width: 1px">Daftar Jual</button></a>
          </div>
          <div class="ps-3">
            <a href="{{ URL::route('jualproduk'); }}"><button type="button" class="btn btn-danger" style="border-radius: 5px;border-color: white; border-width:1px ">+ Jual</button></a>
          </div>
          <div class="ps-3">
            <a href="">
              <img src="https://i.imgur.com/C4egmYM.jpg" class="rounded-circle" width="50 " >
            </a>
          </div>
        </div>
      </div>
    </div>
</div>