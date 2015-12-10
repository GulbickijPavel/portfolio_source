        <section class="jumbotron" id="projects">
            <div class="experience-content">
                <h2>{translation langEn="Projects"}
                    {if ($is_admin)}
                    <a class="btn btn-primary right control" id="proj-button">{translation langEn="Control"}</a>
                {/if}
                </h2>
                <hr>
                <ul class="bxslider">
                    {foreach from=$projectslist item=item key=key}
                    <li>
                        <h3> {$item.projectname}</h3>
<!--
                         <div class="gallery row">
                          <a class="col-xs-4 col-sm-4" href="{$item.image1}">
                            <img class="proj-image" src="{$item.image1}" alt="thumb1">
                          </a>
                          <a class="col-xs-4 col-sm-4" href="{$item.image2}">
                            <img class="proj-image" src="{$item.image2}" alt="thumb2">
                          </a>
                        <a class="col-xs-4 col-sm-4" href="{$item.image2}">
                            <img class="proj-image" src="{$item.image3}" alt="thumb3">
                          </a>
                        </div>
-->
                        <ul class="bxslider inner">
                            <li>
                                <a href=""  rel="{$item.image1}"><img  src="images/projects/Portfolio-1-1.png" alt="image" /></a>
                            </li>
                            <li>
                                <a href="" rel="{$item.image2}"><img  src="images/projects/Portfolio-2-1.png" alt="image" /></a>
                            </li>
                            <li>
                                <a href="" rel="{$item.image3}"><img  src="images/projects/Portfolio-3-1.png" alt="image" /></a>
                            </li>
                        </ul>
                        <article class="experience-desc">
                            {if $lang == 'en'} 
                            {$item.descriptionEn}
                            {/if}
                            {if $lang == 'lt'} 
                            {$item.descriptionLt}
                            {/if}
                            {if $lang == 'ru'} 
                            {$item.descriptionRu}
                            {/if}
                        </article>
                    </li>
                    {/foreach}
                </ul>
            </div>   
        </section>