<div class="scenter container">
   <div class="search-inside search-in-status toogle-search">
      <h3>FIND YOUR TRIP</h3>
      <form name="frmSearch" class="form-horizontal" id="frmSearch" action="http://localhost/vietnamsaigontravel/search" method="get">
         <ul>
            <li>
               <select class="form-control" name="slDestination" id="slDestination">
                  <option value="1">-- [Vietnam Destinations] --</option>
                  <option value="Cai Be">Cai Be</option>
                  <option value="Can Tho">Can Tho</option>
                  <option value="Chau Doc">Chau Doc</option>
                  <option value="Cu Chi">Cu Chi Tunnels</option>
                  <option value="DaLat">Da Lat</option>
                  <option value="Da Nang">Da Nang</option>
                  <option value="Floating Market">Floating Market</option>
                  <option value="Halong Bay">Halong Bay</option>
                  <option value="hanoi">Hanoi Capital</option>
                  <option value="Ho Chi Minh City">Ho Chi Minh City</option>
                  <option value="hoi an">Hoian Ancient Town</option>
                  <option value="Hue">Hue Citadel</option>
                  <option value="Lao Cai">Lao Cai</option>
                  <option value="Mekong Delta">Mekong Delta</option>
                  <option value="Mui Ne">Mui Ne - Phan Thiet</option>
                  <option value="My Tho">My Tho</option>
                  <option value="Nha Trang">Nha Trang</option>
                  <option value="Phu Quoc">Phu Quoc Island</option>
                  <option value="sapa">Sapa</option>
                  <option value="Vinh Long">Vinh Long</option>
                  <option value="Vung Tau">Vung Tau</option>
               </select>
            </li>
            <li>
               <select class="form-control" name="slDuration" id="slDuration">
                  <option value="-1">-- [Trip Duration] --</option>
                  <option value="1 - 2">1 - 2 days</option>
                  <option value="2 - 5">2 - 5 days</option>
                  <option value="6 - 12">6 - 12 days</option>
                  <option value="13 -&gt;">13 -&gt; days</option>
               </select>
            </li>
            <li>
               <select class="form-control" name="slPrice" id="slPrice">
                  <option>-- [Price] --</option>
                  <option value="100 - 300">100 - 300 USD</option>
                  <option value="200 - 500">200 - 500 USD</option>
                  <option value="500 - 1000">500 - 1000 USD</option>
                  <option value="1000 -&gt;">&gt; 1000 USD</option>
                  </select>
            </li>
            <li class="lsearchlast">
               <input type="submit" name="Submit" id="Submit" value="Search" class="btn btn-main btn-orange" onclick="return validate();">
         </li>
         </ul>
     </form>
   </div>
</div>