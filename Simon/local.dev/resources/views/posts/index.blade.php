@inject('posts', 'App\Http\Controllers\PostController')
<div class="portfolio">
  @foreach ($posts->index() as $post)
    <div class="bloc">
      <figure class="white" style="height:239px;">
        <a href="details.html">
          <img src="img/{{$post->image}}" alt="" />
          <dl>
            <dt>{{str_limit($post->titre,$limit = 24, $end= '...')}}</dt>
            <dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>
          </dl>
        </a>
        <div id="wrapper-part-info">
          <div class="part-info-image"><img src="img/{{$post->categorie_id}}" alt="" width="28" height="28"/></div>
          <div id="part-info">{{str_limit($post->titre,$limit = 24, $end= '...')}}</div>
        </div>
      </figure>
    </div>
  @endforeach
</div>
