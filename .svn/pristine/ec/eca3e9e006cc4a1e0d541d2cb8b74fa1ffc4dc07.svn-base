@extends('layout.admin')

@section('page-content')

	<form role="form" method="post">
		<div class="form-group">
			<textarea class="form-control ckeditor" name="editor-ckeditor" id="editor-ckeditor" rows="10"></textarea>
		</div>
	</form>
@stop

@section('script')
	@include('module.ckeditor.index')
	<script>
		CKEDITOR.replace( 'editor-ckeditor' ,{ filebrowserBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserUploadUrl : '{{ asset("public") }}/filemanager/dialog.php?type=2&editor=ckeditor&fldr=', filebrowserImageBrowseUrl : '{{ asset("public") }}/filemanager/dialog.php?type=1&editor=ckeditor&fldr=' });

	</script>
@stop