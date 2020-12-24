<main style="width: 50%; margin: 20px auto;">
    <form method="POST" action="{{route('module.storePromo', ['module_id' => $current_module_id])}}">
        @csrf
        @foreach($promos as $promo)
        <h6>
            <input type="checkbox" class="form-check" id="module-{{ $promo->id }}" value="{{ $promo->id }}" name="promos[]" @foreach($promo->modules as $deliverable_module)
            @if($deliverable_module->id == $current_module_id) checked @endif
            @endforeach>
            <label for="promo-{{ $promo->id }}">{{ $promo->name }} {{ $promo->specialty }}</label>
        </h6>
        @endforeach
        <button type="submit" class="btn shadow-1 rounded-1 small grey dark-5 uppercase"><span class="outline-text">Ajouter</span></button>
    </form>
</main>