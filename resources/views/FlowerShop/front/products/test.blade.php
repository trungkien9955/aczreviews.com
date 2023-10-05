<?php 
                                                                    
                                                                    $rating_info = Product::get_rating($product['id']);
                                                                    $is_rated = $rating_info['is_rated'];
                                                                    ?>
                                                                    @if($is_rated == "no")
                                                                    <?php 
                                                                        $count = 5;
                                                                        while($count>0) {
                                                                            echo '<span style = "color:#ccc; font-size: 36px;">&#9733;</span>';
                                                                            $count--;
                                                                        }
                                                                    ?>
                                                                    @else
                                                                    <?php
                                                                    $count = 0;
                                                                    $total_count = 5- $rating_info['product_rating'];
                                                                    while($count< $rating_info['product_rating']) {
                                                                        echo '<span style = "color:#ffc700; font-size: 36px;">&#9733;</span>';
                                                                        $count++;
                                                                    }
                                                                    while($total_count>0) {
                                                                        echo '<span style = "color:#ccc; font-size: 36px;">&#9733;</span>';
                                                                        $total_count--;
                                                                    }
                                                                    ?>
                                                                    @endif 