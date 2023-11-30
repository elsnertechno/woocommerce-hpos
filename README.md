
# How to Make WooCommerce Plugin High Performance Order Storage (HPOS) Compatible? 

// Instead of following: 

update_post_meta( $order_id, $meta_key, $meta_value );

add_post_meta( $order_id, $meta_key, $meta_value ); 

delete_post_meta( $order_id, $meta_key, $meta_value ); 

get_post_meta( $order_id, $meta_key, true);

// use 

$order = wc_get_order( $order_id ); 

$order->update_meta_data( $meta_key, $meta_value ); 

$order->add_meta_data( $meta_key, $meta_value ); 

$order->delete_meta_data( $meta_key, $meta_value ); 

$order->get_meta( $meta_key, true ); 

$order->save();
