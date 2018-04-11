<div class="card mb-5">
  <div class="card-body">
    <h3 class="mb-0">
      <a class="text-dark" href="/news/{{ $new->id }}">{{ $new->tittle }}</a>
    </h3>
    <div class="mb-1 text-muted">
      Created by {{ $new->user->name }} on
      {{ $new->created_at->toFormattedDateString() }}
    </div>
    <p class="card-text mb-auto">{{ $new->resume }}</p>
    <a href="/news/{{ $new->id }}">Continue reading</a>
  </div>
</div>
