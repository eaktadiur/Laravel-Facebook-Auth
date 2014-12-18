
<!-- Modal -->
<div class="modal fade" id="facebookShareBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">Please Copy this text & post with Facebook</h4>
      </div>
      <div class="modal-body">
     
        @if(Auth::check() )
        {{ url().'/referal/'.Auth::user()->referance_token }}
        <div class="fb-share-button" data-href="{{ url() }}" data-layout="link">{{ url().'/referal/'.Auth::user()->referance_token }}</div>

       
       @endif
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!------>