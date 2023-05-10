
<div class="wrapper">
            <div class="FooterList">
                <ul  class="Nav" v-for="element in FooterNav"> 

                    <li class="ListName">
                        {{element.Name}}
                        <ul>
                            <li class="ListItem" v-for="contenuti in element.NavElement">{{ contenuti }}</li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="img-wrapper">
                <img src="../assets/dc-logo-bg.png" class="dc-img" alt="">
            </div>
</div>