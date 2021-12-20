<div id="bungkus">
<table border="0px" width="100%">
                <?php 
                        if (isset($_POST["hp1"])){
                            $hp1 = $_POST["hp1"];
                            $hp2 = $_POST["hp2"];
                            $hp3 = $_POST["hp3"];
                            $hp4 = $_POST["hp4"];
                            $hp5 = $_POST["hp5"];
                            $hp6 = $_POST["hp6"];
                            $dapur1 = $_POST["dapur1"];
                            $dapur2 = $_POST["dapur2"];
                            $dapur3 = $_POST["dapur3"];
                            $dapur4 = $_POST["dapur4"];
                            $dapur5 = $_POST["dapur5"];
                            $dapur6 = $_POST["dapur6"];
                            $ruker1 = $_POST["ruker1"];
                            $ruker2 = $_POST["ruker2"];
                            $ruker3 = $_POST["ruker3"];
                            $ruker4 = $_POST["ruker4"];
                            $ruker5 = $_POST["ruker5"];
                            $ruker6 = $_POST["ruker6"];
                            $kamar1 = $_POST["kamar1"];
                            $kamar2 = $_POST["kamar2"];
                            $kamar3 = $_POST["kamar3"];
                            $kamar4 = $_POST["kamar4"];
                            $kamar5 = $_POST["kamar5"];
                            $kamar6 = $_POST["kamar6"];
                            $kurir = $_POST["kurir"];
                            $diskon = $_POST["diskon"];
                        ?>

                    <tr id="sa" style="height: 45px;background-color: tomato;">
                    
                                       
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>jumlah</th>
                        <th>total Harga</th>
                        
                    </tr>

                    

                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td ><?php echo"$hpnama1"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$hpharga1_ubah" ?></td>
                        <td><?php echo(int)"$hp1";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total1 = $hpharga1 *intval($hp1);
                        $hp1_ubah =  number_format($total1);   echo "Rp. " ; echo $hp1_ubah;
                        ?>
                        </td>

                        <?php
                        }

                        
                        ?>


                    </tr>

                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td ><?php echo"$hpnama2"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$hpharga2_ubah" ?></td>
                        <td><?php echo(int)"$hp2 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total2 = $hpharga2*intval($hp2);
                        $hp2_ubah =  number_format($total2);   echo "Rp. " ; echo $hp2_ubah;
                        ?>
                        </td>


                    </tr>

                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td><?php echo"$hpnama3"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$hpharga3_ubah" ?></td>
                        <td><?php echo(int)"$hp3 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total3 = $hpharga3*intval($hp3);
                        $hp3_ubah =  number_format($total3);   echo "Rp. " ; echo $hp3_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$hpnama4"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$hpharga4_ubah" ?></td>
                        <td><?php echo(int)"$hp4 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total4 = $hpharga4*intval($hp4);
                        $hp4_ubah =  number_format($total4);   echo "Rp. " ; echo $hp4_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td><?php echo"$hpnama5"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$hpharga5_ubah" ?></td>
                        <td><?php echo(int)"$hp5 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total5 = $hpharga5*intval($hp5);
                        $hp5_ubah =  number_format($total5);   echo "Rp. " ; echo $hp5_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$hpnama6"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$hpharga6_ubah" ?></td>
                        <td><?php echo(int)"$hp6 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total6 = $hpharga6*intval($hp6);
                        $hp6_ubah =  number_format($total6);   echo "Rp. " ; echo $hp6_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td id="sb"><?php echo"$pdnama1"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$pdharga1_ubah" ?></td>
                        <td><?php echo(int)"$dapur1 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total7 = $pdharga1*intval($dapur1);
                        $pd1_ubah =  number_format($total7);   echo "Rp. " ; echo $pd1_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$pdnama2"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$pdharga2_ubah" ?></td>
                        <td><?php echo(int)"$dapur2 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total8 = $pdharga2*intval($dapur2);
                        $pd2_ubah =  number_format($total8);   echo "Rp. " ; echo $pd2_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td><?php echo"$pdnama3"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$pdharga3_ubah" ?></td>
                        <td><?php echo(int)"$dapur3 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total9 = $pdharga3*intval($dapur3);
                        $pd3_ubah =  number_format($total9);   echo "Rp. " ; echo $pd3_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$pdnama4"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$pdharga4_ubah" ?></td>
                        <td><?php echo(int)"$dapur4 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total10 = $pdharga4*intval($dapur4);
                        $pd4_ubah =  number_format($total10);   echo "Rp. " ; echo $pd4_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td><?php echo"$pdnama5"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$pdharga5_ubah" ?></td>
                        <td><?php echo(int)"$dapur5 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total11 = $pdharga5*intval($dapur5);
                        $pd5_ubah =  number_format($total11);   echo "Rp. " ; echo $pd5_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$pdnama6"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$pdharga6_ubah" ?></td>
                        <td><?php echo(int)"$dapur6 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total12 = $pdharga6*intval($dapur6);
                        $pd6_ubah =  number_format($total12);   echo "Rp. " ; echo $pd6_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td id="sc"><?php echo"$rknama1"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$rkharga1_ubah" ?></td>
                        <td><?php echo(int)"$ruker1 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total13 = $rkharga1*intval($ruker1);
                        $rk1_ubah =  number_format($total13);   echo "Rp. " ; echo $rk1_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$rknama2"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$rkharga2_ubah" ?></td>
                        <td><?php echo(int)"$ruker2 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total14 = $rkharga2*intval($ruker2);
                        $rk2_ubah =  number_format($total14);   echo "Rp. " ; echo $rk2_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td><?php echo"$rknama3"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$rkharga3_ubah" ?></td>
                        <td><?php echo(int)"$ruker3 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total15 = $rkharga3*intval($ruker3);
                        $rk3_ubah =  number_format($total15);   echo "Rp. " ; echo $rk3_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$rknama4"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$rkharga4_ubah" ?></td>
                        <td><?php echo(int)"$ruker4 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total16 = $rkharga4*intval($ruker4);
                        $rk4_ubah =  number_format($total16);   echo "Rp. " ; echo $rk4_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td><?php echo"$rknama5"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$rkharga5_ubah" ?></td>
                        <td><?php echo(int)"$ruker5 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total17 = $rkharga5*intval($ruker5);
                        $rk5_ubah =  number_format($total17);   echo "Rp. " ; echo $rk5_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$rknama6"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$rkharga6_ubah" ?></td>
                        <td><?php echo(int)"$ruker6 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total18 = $rkharga6*intval($ruker6);
                        $rk6_ubah =  number_format($total18);   echo "Rp. " ; echo $rk6_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td id="sd"><?php echo"$kmnama1"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$kmharga1_ubah" ?></td>
                        <td><?php echo(int)"$kamar1 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total19 = $kmharga1*intval($kamar1);
                        $km1_ubah =  number_format($total19);   echo "Rp. " ; echo $km1_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$kmnama2"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$kmharga2_ubah" ?></td>
                        <td><?php echo(int)"$kamar2 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total20 = $kmharga2*intval($kamar2);
                        $km2_ubah =  number_format($total20);   echo "Rp. " ; echo $km2_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td><?php echo"$kmnama3"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$kmharga3_ubah" ?></td>
                        <td><?php echo(int)"$kamar3 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total21 = $kmharga3*intval($kamar3);
                        $km3_ubah =  number_format($total21);   echo "Rp. " ; echo $km3_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$kmnama4"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$kmharga4_ubah" ?></td>
                        <td><?php echo(int)"$kamar4 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total22 = $kmharga4*intval($kamar4);
                        $km4_ubah =  number_format($total22);   echo "Rp. " ; echo $km4_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="height: 35px;background-color: lavender;text-align: center;">
                        <td><?php echo"$kmnama5"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$kmharga5_ubah" ?></td>
                        <td><?php echo(int)"$kamar5 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total23 = $kmharga5*intval($kamar5);
                        $km5_ubah =  number_format($total23);   echo "Rp. " ; echo $km5_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr style="background-color: aquamarine;height: 35px;text-align: center;">
                        <td><?php echo"$kmnama6"?></td>
                        <td><?php echo"Rp.";?>&nbsp;<?php  echo"$kmharga6_ubah" ?></td>
                        <td><?php echo(int)"$kamar6 Pcs";?>&nbsp;<?php echo"Pcs";?></td>
                        <td>
                        <?php 
                        $total24 = $kmharga6*intval($kamar6);
                        $km6_ubah =  number_format($total24);   echo "Rp. " ; echo $km6_ubah;
                        ?>
                        </td>


                    </tr>
                    <tr id = "total">
                        <td colspan="3" style="height: 45px; ">Total Belanja</td>
                        <td style="height: 45px;background-color: tomato;text-align: center; "><?php 
                        $semua = $total1 +$total2 +$total3 +$total4 +$total5 +$total6 +
                                 $total7 +$total8 +$total9 +$total10 +$total11 +$total12 +
                                 $total13 +$total14 +$total15 +$total16 +$total17 +$total18 +
                                 $total19 +$total20 +$total21 +$total22 +$total23 +$total24 ;


                                 $semua_ubah =  number_format($semua);
                        echo"Rp. $semua_ubah";
                        ?></td>
                    </tr>
                    
                    <tr>
                        <td>Ongkos Kirim</td>
                        <td colspan="2"><?php if($kurir == "JNE Express"){$ongkir = 32000;}
                                    elseif($kurir == "Ninja Reguler"){$ongkir = 16000; }
                                    elseif($kurir == "SiCepat Express"){$ongkir = 30000;}
                                    elseif($kurir == "Gojek"){$ongkir = 45000;}
                        
                                     echo  $kurir;?></td>
                        <td>
                        <?php $ongkir_ubah =  number_format($ongkir);
                        echo "Rp. ";echo $ongkir_ubah;?>
                        </td>
                    </tr>

                    <tr>
                        <td>Diskon</td>
                        <td colspan="2">
                        <?php if ($diskon == "Gratis ongkir"){$dsc= 0 ;}
                            if ($diskon == "-"){$dsc= 0 ;}
                            elseif($diskon == "Cashback 5 %"){$dsc = (5/100)*$semua;}
                            echo  $diskon;?></td>
                        
                        
                        
            

                        </td>

                        <td style="text-align: Right; "><?php  $dsc_ubah =  number_format($dsc);   echo "Rp. " ; echo $dsc_ubah;?></td>
                    </tr>

                    <tr>
                        <td colspan="3" style="height: 45px;background-color: black;"><p><font color="white">Yang Harus Dibayar</font> </p></td>
                        
                        <td style="height: 45px;background-color: tomato;text-align: center; "><?php 
                        if ($diskon == "Gratis ongkir"){$ttl = $ongkir*0; $jml = ($semua +$ttl);}
                        elseif($diskon == "Cashback 5 %"){$jml =( $semua + $ongkir )- $dsc;}
                        elseif($diskon == "-"){$jml = ($semua + $ongkir);}
                        $jml_ubah =  number_format($jml);   echo "Rp. " ; echo $jml_ubah;
                        ?></td>
                    </tr>



                        </table>
                        <form action="index.php?hal=konfirmasi#bayar" method="post">
                        <HR ="8">
                        <table id="2">
                            <tr>
                                <td>Masukan Nominal Pembayaran</td>
                                <td>Rp.</td>
                                <td><input type="text" sixe="20" height="200px" name="kwita" ></input></td>
                    </tr>
                    <tr>
                    <td>Pengejaan Nominal Yang harus Dibayar</td>
                    <td colspan="5"><textarea size="20" name="eja"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2">Nama Pelanggan</td>
                        <td ><input type="text" sixe="20" height="200px" name="nkwi"></input></td>
                    </tr>
                    <tr>
                        <td ><input type="hidden" sixe="20" height="200px" name="ttlo" value="<?= $jml_ubah;?>"></input></td>
                        <td ><input type="hidden" sixe="20" height="200px" name="tujuan" value="Pembelian Sejumlah Barang Di Project Elektronik"></input></td>
                        <td><input type="hidden" name="bay" value="<?= $jml ?>"</td>
                        
                    </tr>
                    <tr>
                        <td><a href="#" onclick="alert('Terima Kasih !!\n Mohon Tunggu Barang Sampai. ')"><input type="submit"  value="Bayar"></td></a>
                    </tr>
                    

                        
                        

                        </table>
                    </form>
                        <HR ="8">
                         <?php 
                                if (isset($_POST["kwita"])){
                                    $kwita = $_POST["kwita"];
                                    $eja = $_POST["eja"];
                                    $nkwi = $_POST["nkwi"];
                                    $ttlo = $_POST["ttlo"];
                                    $tujuan = $_POST["tujuan"];
                                    $tanggal = $_POST["tanggal"];
                                    $bay = $_POST["bay"];
                                    
                                    
                                ?>



                        <div id="kembal" style="text-align: center;">
                            <h2>Jumlah Kembalian</h2>
                            <p><?php $too=($kwita-$bay); $too_ubah =  number_format($too);   echo "Rp. " ; echo $too_ubah; ?></p>
                        </div>
                                


                        <div id="nota">
                            <table border="0" class="not">
                               


                                
                                <tr>
                                    <td  style="width: 150px;"></td>
                                    <td style="width: 60px;"></td>
                                    <td   colspan="7" style="width: 105px; height: 40px;"><?php echo $nkwi ;?></td>

                                    <?php } ?>
                                    
                                    

                    </tr>
                    <tr style="height: 59px;">
                    <td style="width: 150px;"></td>
                                    <td style="width: 60px;"></td>
                                    <td colspan="7" style="width: 105px;"><?php echo $eja ;?></td>
                                    
                                    

                    </tr>
                    <tr style="height: 37px;">
                    <td style="width: 150px;"></td>
                                    <td style="width: 60px;"></td>
                                    <td colspan="7" style="width: 105px;"><?php echo $tujuan ;?></td>
                                    

                    </tr> 
                    <tr style="height: 37px;">
                    <td colspan="9" style="width: 150px;"></td>
                                    

                    </tr> 
                    <tr style="height: 36px;">
                    <td colspan="9" style="width: 150px;"></td>
                                   

                    </tr>
                     <tr style="height: 55px;">
                     <td  style="width: 150px;"></td>
                                    <td style="width: 60px;"></td>
                                    <td style="width: 105px;"></td>
                                    <td style="width: 255px;"></td>
                                    <td style="width: 70px;"><?php echo date("l") ; echo",";?></td>
                                    <td style="width: 20px;"><?php echo date("j") ;?></td>
                                    <td style="width: 99px;"><?php echo date("F") ;?></td>
                                    <td style="width: 40px;"></td>
                                    <td style="width: 38px;"><?php echo date("y") ;?></td>

                    </tr> 
                    <tr style="height: 40px;">
                    <td style="width: 150px;"></td>
                                    <td colspan="2" style="width: 60px;"><?php echo $ttlo ;?></td>
                                    
                                    
                                    

                    </tr> 
                    </tabel>
                        </div>


                    </div>
                    </div>
                    
<div id="kanan">
    
    <ul>
        <li><a href="#sa">DeTail Barang</a></li>
        <li><a href="#total">Pembayaran</a></li>
</ul>

</div>