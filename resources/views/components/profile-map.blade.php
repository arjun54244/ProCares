<div class="clinic-loc">
    <div class="row align-items-center">
        <div class="col-lg-7">
            <div class="clinic-info">
                <div class="clinic-img"><img src="{{asset('storage/'.$mapimg)}}" alt="Img"></div>
                <div class="detail-clinic">
                    <h5>{{ $name }}</h5>
                    <span> Apponitment</span>
                    <p>{{ $address }}</p>
                </div>
            </div>
            <div class="d-flex align-items-center avail-time-slot">
                @if (isset($times))
                @foreach ($times as $time)
                <div class="availability-date">
                    <div class="book-date">
                        <h6>{{ ucfirst($time['day']) }}</h6>
                        <span>{{ $time['time'] }}</span>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
        <div class="col-lg-5">
            <div class="contact-map d-flex">
                <iframe src="{{ asset($map)  }}" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
