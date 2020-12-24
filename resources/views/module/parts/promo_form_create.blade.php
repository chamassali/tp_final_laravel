<main style="width: 50%; margin: 20px auto;">
    <form method="POST" action="{{route('promo.storeModule', ['promo_id' => $current_promo_id])}}">
        @csrf
        @foreach($modules as $module)
        <h6>
            <input type="checkbox" class="form-check" id="module-{{ $module->id }}" value="{{ $module->id }}" name="modules[]" @foreach($module->promos as $deliverable_promo)
            @if($deliverable_promo->id == $current_promo_id) checked @endif
            @endforeach>
            <label for="module-{{ $module->id }}">{{ $module->name }}</label>
        </h6>
        @endforeach
        <button type="submit" class="btn shadow-1 rounded-1 small grey dark-5 uppercase"><span class="outline-text">Ajouter</span></button>
    </form>
</main>