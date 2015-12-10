        <section class="jumbotron" id="projects">
            <h2>{translation langEn="Projects"}</h2>
            <hr>
            <ul class="projects-list">
                <h4>Projects list</h4>
                {foreach from=$projects item=item key=key}
                <li>{$item.projectname}</li>
                {/foreach}
            </ul>
            <div class="projects-content">

                <ul class="bxslider projects">
                    {foreach from=$projects item=item key=key}
                    <li>
                        <h3> {$item.projectname}</h3>
                        <ul id="proj-inner-slider" class="bxslider inner">
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='{$item.image1high}'>
                                   <source media="(min-width: 37.5em)" srcset='{$item.image1med}'>
                                   <source srcset='{$item.image1low}'>
                                   <img src='{$item.image1low}' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='{$item.image2high}'>
                                   <source media="(min-width: 37.5em)" srcset='{$item.image2med}'>
                                   <source srcset='{$item.image2low}'>
                                   <img src='{$item.image2med}' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='{$item.image3high}'>
                                   <source media="(min-width: 37.5em)" srcset='{$item.image3med}'>
                                   <source srcset='{$item.image3low}'>
                                   <img src='{$item.image3med}' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
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