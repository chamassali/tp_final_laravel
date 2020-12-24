<main style="width: 50%; margin: 20px auto;">
    <form method="POST" action="{{route('module.storeEleve', ['module_id' => $current_module_id])}}">
        @csrf
        @foreach($eleves as $eleve)
        <h6>
            <input type="checkbox" class="form-check" id="module-{{ $eleve->id }}" value="{{ $eleve->id }}" name="eleves[]" @foreach($eleve->modules as $deliverable_module)
            @if($deliverable_module->id == $current_module_id) checked @endif
            @endforeach>
            <label for="eleve-{{ $eleve->id }}">{{ $eleve->firstname }} {{ $eleve->lastname }}</label>
        </h6>
        @endforeach
        <button type="submit" class="btn shadow-1 rounded-1 small grey dark-5 uppercase"><span class="outline-text">Ajouter</span></button>
    </form>
</main>