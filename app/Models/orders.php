<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Gloudemans\Shoppingcart\Facades\Cart;

use App\orders;

use App\Notifications;

use illuminate\support\Facades\Auth;

class orders extends Model
{
    protected $fillable=['total', 'status'];
    public function orderFields(){

        return $this->belongsToMany(products::class)->withPivot('qty', 'total');

    }

    public static function createOrder(){

        $user = Auth::user();
        $order = $user->orders()->create(['total'=>Cart::total(),'status'=>'pending']);

        $cartItems = Cart::content();
        foreach($cartItems as $cartItem)

            $order->orderFields()->attach($cartItem->id,['qty'=>$cartItem->qty, 'tax' =>Cart::tax(), 'total'=>Cart::total()]);
            //Insert Notification
            $Notifications = new Notifications;
            $Notifications->type = 'Order';
            $Notifications->content = 'You have a new Order';
            $Notifications->save();



       }


    }

