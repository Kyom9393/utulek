<?=$this->extend("layout/master");?>
<?=$this->section("content");?>

<?php


if($message != NULL) {
  echo '<div class="pop-up bg-success">'.$message.
  '</div>';
}
?>

<form action="../edit" method="post" enctype="multipart/form-data">

<div class="text-center">
  <h1 class="text-uppercase form-title"><i class="fa-solid fa-arrows-rotate fa-spin"></i> Upravit kočku</h1>
</div>

    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id_kocka" value="<?=$array[0]->id_kocka?>">

    <div class="form-group">
      <label for="inputStatus" class="form-label mt-4 titles">Status</label>
      <input type="hidden" name="id" value="status"/>
      <select required='required' id="inputStatus" name="status" class="form-control" aria-describedby="input" placeholder="Vyberte status">
        <option value=""><?php
          echo $array[0]->status;
        ?></option>
        <option value="3">Adoptovaná</option>
        <option value="2">Nedostupná</option>
        <option value="1">Dostupná</option>
      </select>

      <label for="inputUrl" class="form-label mt-4 titles">Jméno</label>
      <input required='required' type="text" class="form-control" id="inputName" placeholder="
      <?php
      echo $array[0]->jmeno;
      ?>
      " name="jmeno">

      <label for="inputName" class="form-label mt-4 titles">Věk</label>
      <input required='required' type="number" min="1" max="18" class="form-control" id="inputAge" aria-describedby="input" placeholder="
      <?php
      echo $array[0]->vek;
      ?>
      " name="vek">

      <label for="inputName" class="form-label mt-4 titles">Váha</label>
      <input required='required' type="number" min="0.1" max="7" step="0.1" class="form-control" id="inputWeight" aria-describedby="input" placeholder="
      <?php
      echo $array[0]->vaha;
      ?>
      " name="vaha">

      <label for="inputBreed" class="form-label mt-4 titles">Plemeno</label>
      <input type="hidden" name="id" value="plemeno_id"/>
      <select required='required' id="inputBreed" name="plemeno_id" class="form-control" aria-describedby="input" placeholder="Vyberte plemeno">
        <option value="">
        <?php
          echo $array[0]->plemeno_id;
        ?>
        </option>
      <?php
        foreach($list as $row){
          echo "<option value='".$row->id_plemeno."'>".$row->id_plemeno." ".$row->nazev."</option>";
        }
      ?>
      </select>

      <label for="inputGender" class="form-label mt-4 titles">Pohlaví</label>
      <input type="hidden" name="id" value="pohlavi"/>
      <select required='required' id="inputGender" name="pohlavi" class="form-control" aria-describedby="input" placeholder="Vyberte pohlaví">
        <option value="">
        <?php
            echo $array[0]->pohlavi;
        ?>
        </option>
        <option value="Kočka">Kočka</option>
        <option value="Kocour">Kocour</option>
      
      </select>

      <label for="inputName" class="form-label mt-4 titles">Datum narození</label>
      <input required='required' type="text" class="form-control" id="inputBD" aria-describedby="input" placeholder="
      <?php
      echo $array[0]->narozeni;
      ?>
      " name="narozeni">

      <label for="inputDesc" class="form-label mt-4 titles">Popis</label>
      <input type="text" class="form-control" id="inputDesc" aria-describedby="input" placeholder="
      <?php
      echo $array[0]->popis;
      ?>
      " name="popis">

        <label for="inputFoto" class="form-label mt-4 titles">Profilový obrázek kočky</label>
        <input type="file" class="form-control" id="inputFoto" aria-describedby="input" name="fotografie">
    </div>

    <input class="btn submit" type="submit" value="Potvrdit" id="flexCheckDefault">

  </div>
  <div class="col-3"></div>
</div>

</form>


<?=$this->endSection();?>