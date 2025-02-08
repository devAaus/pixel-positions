@props(['employer', 'width' => 90, 'height' => 90])

<img
    src="{{ $employer->logo ? asset($employer->logo) : Vite::asset('resources/images/default.jpg') }}"
    alt="company_logo"
    class="rounded-xl border object-cover"
    width="{{ $width }}"
    height="{{ $height }}"
    style="aspect-ratio: 1 / 1;">
