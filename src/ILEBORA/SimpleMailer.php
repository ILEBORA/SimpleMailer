<?php 
namespace ILEBORA;
/*
 * The MIT License (MIT)
 *
 * Copyright (c) 2022 Dominic Karau
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 */
 
/**
 * ILEBORA Simple PHP Mailer
 * 
 * Just a simple mailer
 *
 * @package SimpleMailer
 * @license http://opensource.org/licenses/MIT  MIT License
 * @author  Dominic Karau <dominic@ilebora.com>
 */

class SimpleMailer{
    private $to;
    private $from;
    private $subject;
    private $body;
    
    public $error;
    

    public function __construct(){
        return $this;
    }

    public function to($to){
        $this->to = $to;    
        return $this;
    }

    public function from($from){
        $this->from = $from;  
        return $this;  
    }
    
    public function subject($subject){
        $this->subject = $subject;    
        return $this;
    }

    public function body($body){
        $this->body = $body;    
        return $this;
    }

    public function send(){  
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From:'."$this->from\r\n";
        $success = mail($this->to,$this->subject,$this->body,$headers);
        
        if (!$success) {
            $this->error = error_get_last()['message']; //TODO Logging
            return false;
        }else{
            return true;
        }
    }
}
