@extends('shop.layouts.app')
@section('title','payment')
@section('content')

                         <h5>Chọn Hình Thức Thanh Toán</h5>
                         <form action="{{URL::to('/order-place')}}">
                             {{csrf_field() }}
                                    <div class="order-payment-method">
                                        <div class="single-payment-method show">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio" name="payment_option">
                                                    <input type="radio" id="cashon" name="paymentmethod" value="cash" class="custom-control-input" checked />
                                                    <label class="custom-control-label" >Tiềm Mặt</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio"  name="payment_option">
                                                    <input type="radio" id="directbank" name="paymentmethod" value="bank" class="custom-control-input" />
                                                    <label class="custom-control-label" for="directbank">Chuyển Qua Thẻ
                                                        </label>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio"  name="payment_option">
                                                    <input type="radio" id="checkpayment" name="paymentmethod" value="check" class="custom-control-input" />
                                                    <label class="custom-control-label" for="checkpayment">Thẻ Tín Dụng</label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="single-payment-method">
                                            <div class="payment-method-name">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="paypalpayment" name="paymentmethod" value="paypal" class="custom-control-input" />
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" name="send_order" class="btn btn__bg">Thanh Toan</button>
                                    </div>
                            </form>
                                    @endsection