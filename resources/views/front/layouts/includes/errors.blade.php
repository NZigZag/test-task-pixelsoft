<div class="wrapper-msg-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                    @if ($errors->any())
                        <div class="msg error">
                            <button type="button" class="msg-close">
                                <i class="fa fa-times"></i>
                            </button>
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                        </div>
                    @endif
                    @if (session()->has('error'))
                        <div class="msg error">
                            <button type="button" class="msg-close">
                                <i class="fa fa-times"></i>
                            </button>
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    @if (session()->has('success'))
                            <div class="msg success">
                                <button type="button" class="msg-close">
                                    <i class="fa fa-times"></i>
                                </button>
                                <p>{{ session('success') }}</p>
                            </div>
                    @endif
            </div>
        </div>
    </div>
</div>
