<div>
  <a href="{{route($slug)}}" class="button-back">
    <svg class="animate-bounce" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="arrow-left" class="svg-inline--fa fa-arrow-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M257.5 445.1l-22.2 22.2c-9.4 9.4-24.6 9.4-33.9 0L7 273c-9.4-9.4-9.4-24.6 0-33.9L201.4 44.7c9.4-9.4 24.6-9.4 33.9 0l22.2 22.2c9.5 9.5 9.3 25-.4 34.3L136.6 216H424c13.3 0 24 10.7 24 24v32c0 13.3-10.7 24-24 24H136.6l120.5 114.8c9.8 9.3 10 24.8.4 34.3z"></path></svg>
    {{$nameBtn}}
  </a>
</div>
<style>
.button-back {
  display: flex;
  padding: 2rem 1rem;
  font-weight: 800;
}
.button-back svg {
  width: 1.5rem;
  height: 1.5rem;
  fill: #299bf3;
  margin-right: 0.5rem
}
.animate-bounce {
  animation: bounce 1s infinite;
}
@keyframes bounce {
  0%, 100% {
    transform: translateX(-25%);
    animationTimingFunction: cubic-bezier(0.8, 0, 1, 1);
  }
  50% {
    transform: translateX(0);
    animationTimingFunction: cubic-bezier(0, 0, 0.2, 1);
  }
}
</style>