
  @if ($current_page == 1)
    <span>Назад&nbsp;</span>
  @else
    <a href="catalog?page={{ $current_page - 1 }}">Назад &nbsp;</a>
  @endif

  @for($i=13, $j=4, $k=3; $i>=1; --$i)
      @if($i > 9)
        @php($k--)
        @if($current_page - 100*$k > 0 && $k >0) <a href="catalog?page={{ $current_page - 100*$k }}">{{ $current_page - 100*$k }}</a>&nbsp; @endif
      @elseif ($i > 6)
        @php($j--)
        @if($current_page - 10*$j > 0) <a href="catalog?page={{ $current_page - 10*$j }}">{{ $current_page - 10*$j }}</a>&nbsp; @endif
      @else
        @if($current_page - $i > 0 && $current_page != $current_page - $i) <a href="catalog?page={{ $current_page - $i }}">{{ $current_page - $i }}</a>&nbsp; @endif
      @endif
  @endfor

  <span>{{ $current_page }}</span>&nbsp;

  @for($i=0, $j=0, $k=0; $i<=13; $i++)
      @if($i > 10)
        @php($k++)
        @if($count_products / 50 > $current_page + 100*$k) <a href="catalog?page={{ $current_page + 100*$k }}">{{ $current_page + 100*$k }}</a>&nbsp; @endif
      @elseif ($i > 5)
        @php($j++)
        @if($count_products / 50 > $current_page + 10*$j) <a href="catalog?page={{ $current_page + 10*$j }}">{{ $current_page + 10*$j }}</a>&nbsp; @endif
      @else
        @if($count_products / 50 > $current_page + $i && $current_page != $current_page + $i) <a href="catalog?page={{ $current_page + $i }}">{{ $current_page + $i }}</a>&nbsp; @endif
      @endif
  @endfor

  @if ($current_page == $count_products / 50)
    <span>&nbsp;Вперед</span>
  @else
    <a href="catalog?page={{ $count_products / 50 }}">{{ $count_products / 50 }}</a>
    <a href="catalog?page={{ $current_page + 1 }}">&nbsp;Вперед</a>
  @endif
