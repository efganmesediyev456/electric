<div class="middel-part__block ptb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="logo">
                    <a href="{{ route('home',[$general->lng->short_name]) }}"> <img src="{{ route('home') }}/images/{{ $general->image }}" alt="Logo"> </a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="top-info__block text-right">
                    <ul>
                        <li>
                            <i class="ion-ios-location-outline"></i>
                            <p>
                                @lang('site.address') <span>{{ $general->address }}</span>
                            </p>
                        </li>
                        <li>
                            <i class="ion-ios-telephone-outline"></i>
                            <p>
                                @lang('site.phone') <span>{{ $general->phone }}</span>
                            </p>
                        </li>
                        <li>
                            <i class="ion-ios-email-outline"></i>
                            <p>
                                @lang('site.email') <span>{{ $general->email }}</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>