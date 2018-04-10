<div id="tools" class="toolbar">
			  <div class="block">
				<a data-wysihtml-command="bold" title="CTRL+B">bold</a>
				<a data-wysihtml-command="italic" title="CTRL+I">italic</a>
				<a data-wysihtml-command="underline" title="CTRL+U">underline</a>
			  </div>
			  <div class="block">
				<a data-wysihtml-command="createLink">link</a>
				<a data-wysihtml-command="removeLink"><s>link</s></a>
				<a data-wysihtml-command="insertImage" >image</a>
				<a data-wysihtml-command="formatBlock" data-wysihtml-command-value="h1">h1</a>
				<a data-wysihtml-command="formatBlock" data-wysihtml-command-value="h2">h2</a>
				<a data-wysihtml-command="formatBlock" data-wysihtml-command-value="h3">h3</a>
				<a data-wysihtml-command="formatBlock" data-wysihtml-command-value="p">p</a>
				<a data-wysihtml-command="formatBlock" data-wysihtml-command-blank-value="true">plaintext</a>
			  </div>
			  
			  <div class="block">
				<a data-wysihtml-command="fontSizeStyle">Size</a>
				<div data-wysihtml-dialog="fontSizeStyle" style="display: none;">
				  Size:
				  <input type="text" data-wysihtml-dialog-field="size" style="width: 60px;" value="px" />
				  <a data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel">Cancel</a>
				</div>
			  </div>

			  <div class="block">
				<a data-wysihtml-command="justifyLeft">justifyLeft</a>
				<a data-wysihtml-command="justifyRight">justifyRight</a>
				<a data-wysihtml-command="justifyFull">justifyFull</a>
			  </div>
			
			  <div class="block">
				<a data-wysihtml-command="foreColorStyle">Color</a>
				<div data-wysihtml-dialog="foreColorStyle" style="display: none;">
				  Color:
				  <input type="text" data-wysihtml-dialog-field="color" value="rgba(0,0,0,1)" />
				  <a data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel">Cancel</a>
				</div>
			  </div>
			  
			  <div class="block">
				<a data-wysihtml-command="bgColorStyle">BG Color</a>
				<div data-wysihtml-dialog="bgColorStyle" style="display: none;">
				  Color:
				  <input type="text" data-wysihtml-dialog-field="color" value="rgba(0,0,0,1)" />
				  <a data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel">Cancel</a>
				</div>
			  </div>
			  
			  <div class="block">
				<a data-wysihtml-command="undo">undo</a>
				<a data-wysihtml-command="redo">redo</a>
			  </div>
			
			  <div class="block">
				<a data-wysihtml-command="createTable">Table</a>
				<div data-wysihtml-dialog="createTable" style="display: none;">
				  Rows: <input type="text" class="pull-right" data-wysihtml-dialog-field="rows" /><br/><br/>
				  Cols: <input type="text" class="pull-right" data-wysihtml-dialog-field="cols" /><br/><br/>
				  <a data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel">Cancel</a>
				</div>
			  </div>
			  <div class="block" data-wysihtml-hiddentools="table" style="display: none;">
				<a data-wysihtml-command="mergeTableCells">Merge</a>
				<a data-wysihtml-command="addTableCells" data-wysihtml-command-value="above">row-before</a>
				<a data-wysihtml-command="addTableCells" data-wysihtml-command-value="below">row-after</a>
				<a data-wysihtml-command="addTableCells" data-wysihtml-command-value="before">col-before</a>
				<a data-wysihtml-command="addTableCells" data-wysihtml-command-value="after">col-after</a>
			  
				<a data-wysihtml-command="deleteTableCells" data-wysihtml-command-value="row">delete row</a>
				<a data-wysihtml-command="deleteTableCells" data-wysihtml-command-value="column">delete col</a>
			  
			  </div>
			
			
			  <div data-wysihtml-dialog="createLink" style="display: none;">
				<label>
				  Link:
				  <input data-wysihtml-dialog-field="href" value="http://">
				</label>
				<a data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel">Cancel</a>
			  </div>
			  <div data-wysihtml-dialog="insertImage" style="display: none;">
				<label>
				  Image:
				  <input data-wysihtml-dialog-field="src" id="chemin_img" disabled="disabled" value="file:///" >
				  <a data-toggle="modal" href="#infos">Parcourir</a>
				</label>
				<label>
				  Align:
				  <select data-wysihtml-dialog-field="className">
					<option value="">default</option>
					<option value="wysiwyg-float-left">left</option>
					<option value="wysiwyg-float-right">right</option>
				  </select>
				</label>
				<a id="OK" data-wysihtml-dialog-action="save">OK</a>&nbsp;<a data-wysihtml-dialog-action="cancel">Cancel</a>
			  </div>
</div>
			<?php
				include_once('Apercu_img.php');
			?>
				