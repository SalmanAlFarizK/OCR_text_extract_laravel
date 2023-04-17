<div class="card">
    <div class="card-body">
        <p><ul>
            @foreach($use as $user)
              <p>{{ $user->id}}<br>{{$user->content}}</p>
            @endforeach
        </ul></p>
    </div>
</div>
<style>
    .card-body {
  background-color: #f5f5f5;
  padding: 20px;
}

.card-body ul {
  list-style: none;
  padding: 0;
}

.card-body p {
  margin: 0 0 10px 0;
}

/* .card-body p:first-of-type {
  font-weight: bold;
} */

.card-body p:nth-of-type(even) {
  background-color: #81a1b3;
}

.card-body p:last-of-type {
  margin-bottom: 0;
}

</style>