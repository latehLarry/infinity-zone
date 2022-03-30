<?php return array (
  'seller_fee' => '350',
  'market_fee' => 
  array (
    'min' => 0.03,
    'max' => 0.05,
  ),
  'monero' => 
  array (
    'host' => 'node.moneroworld.com',
    'port' => '18089',
    'user' => '',
    'password' => '',
  ),
  'days_cancel_orders' => 2,
  'days_complete_orders' => 30,
  'days_delete_old_order' => 7,
  'days_delete_conversations' => 30,
  'order_status' => 
  array (
    0 => 'waiting',
    1 => 'accepted',
    2 => 'shipped',
    3 => 'delivered',
    4 => 'canceled',
    5 => 'disputed',
  ),
  'reporting_causes' => 
  array (
    'prohibited_product' => 'prohibited product',
    'scam_attempt' => 'scam attempt',
    'fake_feedback' => 'fake feedback',
    'violates_market_rules' => 'violates market rules',
    'other' => 'other',
  ),
  'feedback_type' => 
  array (
    0 => 'negative',
    1 => 'neutral',
    2 => 'positive',
  ),
  'order_by' => 
  array (
    0 => 'newest',
    1 => 'oldest',
  ),
  'dread_forum_link' => '/wiki',
  'wiki_link' => '/wiki',
);