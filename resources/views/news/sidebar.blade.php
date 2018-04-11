<h4 class="font-italic">Archives</h4>
<ol class="list-unstyled mb-0">
  @foreach($archives as $stat)
    <li>
      <a href="/news/?month={{ $stat['month'] }}&year={{ $stat['year'] }}">
        {{ $stat['month'] }} {{ $stat['year'] }}
      </a>
    </li>
  @endforeach
</ol>
