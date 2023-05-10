
<div class="wrapper">
            <div class="FooterList">
                @foreach ($dbfooter as $element)
                    <ul  class="Nav" v-for="element in FooterNav"> 

                        <li class="ListName">
                            {{$element['Name']}}
                            <ul>
                                @foreach ($element['NavElement'] as $contenuti)
                                    <li class="ListItem" >{{ $contenuti }}</li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                @endforeach
            </div>
            <div class="img-wrapper">
                <img src="../assets/dc-logo-bg.png" class="dc-img" alt="">
            </div>
</div>