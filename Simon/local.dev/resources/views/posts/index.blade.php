@inject('posts', 'App\Http\Controllers\PostController')
@foreach ($posts->index() as $post)
  <figure class="white">
    <a href="details.html">
      <img src="img/{{$post->image}}" alt="" />
      <dl>
        <dt>{{$post->titre}}</dt>
        <dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>
      </dl>
    </a>
    <div id="wrapper-part-info">
      <div class="part-info-image"><img src="img/{{$post->categorie_id}}" alt="" width="28" height="28"/></div>
      <div id="part-info">{{$post->titre}}</div>
    </div>
  </figure>
@endforeach
