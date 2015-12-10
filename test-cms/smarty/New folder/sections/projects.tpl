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
                        <ul id="proj-inner-slider" class="bxslider inner">
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="{$item.imagePath}high-{$item.image1}">
                                   <source media="(min-width: 37.5em)" srcset="{$item.imagePath}med-{$item.image1}">
                                   <source srcset="{$item.imagePath}low-{$item.image1}">
                                   <img srcset="stop.jpg" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="{$item.imagePath}high-{$item.image2}">
                                   <source media="(min-width: 37.5em)" srcset="{$item.imagePath}med-{$item.image2}">
                                   <source srcset="{$item.imagePath}low-{$item.image2}">
                                   <img srcset="stop.jpg" alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset="{$item.imagePath}high-{$item.image3}">
                                   <source media="(min-width: 37.5em)" srcset="{$item.imagePath}med-{$item.image3}">
                                   <source srcset="{$item.imagePath}low-{$item.image3}">
                                   <img srcset="stop.jpg" alt="This picture loads on non-supporting browsers.">
                                </picture></a></a>
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