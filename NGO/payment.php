<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the links inside the tab */
div.tab a {
    float: left;
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
div.tab a:hover {
    background-color: #fff;
}

/* Create an active/current tablink class */
div.tab a:focus, .active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body>

<p><h2>Choose Your Payment Mode</h2> </p>

<div class="tab">
  <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'credit')">Credit Card</a>
  <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'debit')">Debit Card</a>
  <a href="javascript:void(0)" class="tablinks" onclick="openCity(event, 'internet')">Internet Banking</a>
</div>

<div id="credit" class="tabcontent">
<br/><table border="0">
  <tr><td>Card No. :</td>
  <td><input type="text" name="txtcno" placeholder="CARD NUMBER"></td></tr><tr><td colspan="2">&nbsp</td></tr>
  <tr> <td>Expiry Date : </td> 
<td><table border="0"> <tr><td> Month </td> <td> Year </td> </tr>
<tr><td><select name="mm"> 
 <option value="not selected"> select </option>
 <option value="jan"> 01 </option>
 <option value="feb"> 02 </option>
 <option value="mar"> 03 </option>
 <option value="apr"> 04 </option>
 <option value="may"> 05 </option>
 <option value="jun"> 06 </option>
 <option value="jul"> 07 </option>
 <option value="aug"> 08 </option>
 <option value="sep"> 09 </option>
 <option value="oct"> 10 </option>
 <option value="nov"> 11 </option>
 <option value="dec"> 12 </option>
</select></td> 
<td><select name="yy"> 
 <option value="not selected"> select </option>
 
 <option value="2021"> 2021 </option>
 <option value="2022"> 2022 </option>
 <option value="2023"> 2023 </option>
 <option value="2024"> 2024 </option>
 <option value="2025"> 2025 </option>
 <option value="2026"> 2026 </option>
 <option value="2027"> 2027 </option>
 <option value="2028"> 2028 </option>
</select></td></tr> </table> 
 </td></tr>
<tr><td colspan="2">&nbsp</td></tr>
<tr><td> CVV/Security Code : </td> <td> <input type="text" placeholder="CVV/SECURITY CODE"></td></tr>
<tr><td colspan="2">&nbsp</td></tr>
<tr><td colspan="2">&nbsp</td></tr>
<tr><td colspan="2"><center><input type="button" value="Pay Now" style="background-color:#9999ff; width:250px;"></center></td></tr>
</table>
</div>

<div id="debit" class="tabcontent">
  <br/><table border="0">
  <tr><td>Card No. :</td>
  <td><input type="text" name="txtcno" placeholder="CARD NUMBER"></td></tr><tr><td colspan="2">&nbsp</td></tr>
  <tr> <td>Expiry Date : </td> 
<td><table border="0"> <tr><td> Month </td> <td> Year </td> </tr>
<tr><td><select name="mm"> 
 <option value="not selected"> select </option>
 <option value="jan"> 01 </option>
 <option value="feb"> 02 </option>
 <option value="mar"> 03 </option>
 <option value="apr"> 04 </option>
 <option value="may"> 05 </option>
 <option value="jun"> 06 </option>
 <option value="jul"> 07 </option>
 <option value="aug"> 08 </option>
 <option value="sep"> 09 </option>
 <option value="oct"> 10 </option>
 <option value="nov"> 11 </option>
 <option value="dec"> 12 </option>
</select></td> 
<td><select name="yy"> 
 <option value="not selected"> select </option>

 <option value="2021"> 2021 </option>
 <option value="2022"> 2022 </option>
 <option value="2023"> 2023 </option>
 <option value="2024"> 2024 </option>
 <option value="2025"> 2025 </option>
 <option value="2026"> 2026 </option>
 <option value="2027"> 2027 </option>
 <option value="2028"> 2028 </option>
</select></td></tr> </table> 
 </td></tr>
<tr><td colspan="2">&nbsp</td></tr>
<tr><td> CVV : </td> <td> <input type="text" placeholder="    CVV    "></td></tr>
<tr><td colspan="2">&nbsp</td></tr>
<tr><td colspan="2">&nbsp</td></tr>
<tr><td colspan="2"><center><input type="button" value="Pay Now" style="background-color:#9999ff; width:250px;"></center></td></tr>
</table>
</div>

<div id="internet" class="tabcontent">
  <br/>
<table border="0">
 <tr><td>Select Your bank :</td><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>
 <tr><td><select name="bank"> 
 <option value="not selected"> select </option>
 <option value="boi"> Bank of India </option>
 <option value="sbi"> State Bank of India  </option>
 <option value="hb"> HDFC Bank  </option>
 <option value="axb"> Axis Bank </option>
 <option value="icici"> ICICI Bank </option>
 <option value="pnb"> Punjab National Bank  </option>
 <option value="kot"> Kotak Bank </option>
 <option value="bob"> Bank of Baroda </option>
 <option value="bom"> Bank of Maharashtra </option>
 <option value="can"> Canara Bank </option>
 <option value="cbi"> Central Bank of India </option>
 <option value="corp"> Corporation Bank </option>
</select></td><td>&nbsp</td></tr><tr><td>&nbsp</td></tr>
<tr><td colspan="2"><center><input type="button" value="Pay Now" style="background-color:#9999ff; width:250px;"></center></td></tr>
</table>
</div>



<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 
