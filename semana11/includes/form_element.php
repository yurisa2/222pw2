<?php

function form_element($name, $type) {

  $html = '';
  $html .= '  <div class="mb-3">';
  $html .= '  <div class="mb-3">';
  $html .= '<label for="'.$name.'">'.$name.'</label>';
  $html .= '    <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text">*</span>
        </div>';
  $html .= '<input type="'.$type.'" name="'.$name.'" class="form-control" id="'.$name.'" placeholder="'.$name.'" required>';

  $html .= '      <div class="invalid-feedback" style="width: 100%;">
          Dados inconsistentes.
        </div>
      </div>
    </div>
    </div>
';

  return $html;
}


 ?>
