<div class="col-sm-6 p-3">
  <div class="card text-white bg-dark">
    <div class="card-body">
      <h5 class="card-tittle d-flex justify-content-between">
        <span>{{ $contact->email }}</span>
        @if($contact->isread == 0)
        <span class="badge badge-secondary">{{ ucfirst(trans('validation.attributes.new')) }}</span>
        @endif
      </h5>
      <h6 class="card-subtitle mb-2 text-muted">{{ $contact->created_at->toFormattedDateString() }}</h6>
      <p class="card-text">{{ $contact->message }}</p>
      <div class="text-right">
        <a href="mailto:{{ $contact->email }}" class="card-link">{{ ucfirst(trans('validation.attributes.reply')) }}</a>
      </div>
    </div>
  </div>
</div>
