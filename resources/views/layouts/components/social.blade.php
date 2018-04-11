<div class="mb-1 mt-2 mr-3">
  <ul class="d-flex justify-content-center mt-4 social">
    @foreach($socialList as $social)
      <li class="mx-4">
        <a href="{{ $social->link }}" title="{{ $social->name }}" target="_blank">
          <i class="fab fa-{{ $social->prefix }} fa-lg"></i>
        </a>
      </li>
    @endforeach
  </ul>
</div>
