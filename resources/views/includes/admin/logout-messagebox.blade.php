<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
    <div class="mb-container">
        <div class="mb-middle">
            <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
            <div class="mb-content">
                <p>Are you sure you want to log out?</p>                    
                <p>Press <strong>"No"</strong> if you want to continue work. Press <strong>"Yes"</strong> to logout.</p>
            </div>
            <div class="mb-footer">
                <div class="pull-right">
                    <a href="{{ route('logout') }}" class="btn btn-success btn-lg"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Yes
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                    <button class="btn btn-default btn-lg mb-control-close">No</button>
                </div>
            </div>
        </div>
    </div>
</div>