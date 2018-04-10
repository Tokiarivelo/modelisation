<style>
  .toolbar a {
    color: #000;
    cursor: pointer;
  }
  
  .editable {
	width: 100%;
	height : 100%;
	border-top : 1px solid #337ab7;
	padding : 10px;
	overflow-x: auto;
	
  }
  
  .editable:focus {
    color: black;
    border : 1px solid #337ab7;
  }
  
  .wysihtml-command-active, .wysihtml-action-active {
    font-weight: bold;
  }
  
  [data-wysihtml-dialog] {
    margin: 5px 0 0;
    padding: 5px;
    border: 1px solid #666;
  }
  
  
  
  a[data-wysihtml-command-value="red"] {
    color: red;
  }
  
  a[data-wysihtml-command-value="green"] {
    color: green;
  }
  
  a[data-wysihtml-command-value="blue"] {
    color: blue;
  }
  
  .wysihtml-editor{
    outline: 1px dotted #abc;
    
  }
  .wysihtml-editor table td , .panel-body table td
  {
	  border :1px solid black;
	  min-width: 50px;
	  padding : 5px;
	  margin : 5px;
  }
  .wysihtml-editor img
  {
	  border :1px solid black;
  }
  
  
  code {
    background: #ddd;
    padding: 10px;
    white-space: pre;
    display: block;
    margin: 1em 0;
  }
  
  .toolbar {
    display: block;
    border-radius: 3px;
    border: 1px solid #fff;
    margin-bottom: 9px;
    line-height: 1em;
  }
  .toolbar a {
    display: inline-block;
    height: 1.5em;
    font-size: 10px;
    line-height: 1.5em;
    text-decoration: none;
    background: #e1e1e1;
    border: 1px solid #ddd;
    padding: 0 0.2em;
    margin: 1px 0;
  }
  .toolbar a.wysihtml-command-active, .toolbar .wysihtml-action-active {
    background: #222;
    color: white;
  }
  .toolbar .block { 
    padding: 1px 1px;
    display: inline-block;
    background: #eee;
    margin: 0px 1px 1px 0;
  }
  
  div[data-wysihtml-dialog="createTable"] {
    background: white;
  }
  
  div[data-wysihtml-dialog="createTable"] td {
    width: 10px; height: 5px;
    border: 1px solid #666;
  }
  
  .wysihtml-editor table td.wysiwyg-tmp-selected-cell {
    outline: 2px solid green;
  }
  
  .editor-container-tag {
    padding: 5px 10px;
    position: absolute;
    color: white;
    background: rgba(0,0,0,0.8);
    width: 100px;
    margin-left: -50px;
    -webkit-transition: 0.1s left, 0.1s top;
  }
  
  .wrap {
    max-width: 700px;
    margin: 40px;
  }
  
  .editable .wysihtml-uneditable-container {
    outline: 1px dotted gray;
    position: relative;
  }
  .editable .wysihtml-uneditable-container-right {
    float: right;
    width: 50%;
    margin-left: 2em;
    margin-bottom: 1em;
  }
  
  .editable .wysihtml-uneditable-container-left {
    float: left;
    width: 50%;
    margin-right: 2em;
    margin-bottom: 1em;
  }
	.modal-body
	{
		height: 400px;
	}
	.modal-body
	{
		overflow: auto;
	}
.nav-pills a{
    cursor: pointer;
 }

  
</style>