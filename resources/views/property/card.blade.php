<div class="card">
    <div class="card-body">
        <div class="card-img">
            <img style="width: 20%" src="{{ asset('storage/'  .  $property->picture) }}" />
        </div>
        <h5 class="card-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property])}}">{{ $property->title}}</a>
        </h5>
        <p class="card-text"> {{ $property->surface }}m² - {{ $property->city }} ({{ $property->postal_code}})</p>
        <div class="text-primary fw-bold" style="font-size: 1.4rem; ">
    {{ number_format($property->price,thousands_separator: ' ' )}} £</div>
    </div>
</div>
