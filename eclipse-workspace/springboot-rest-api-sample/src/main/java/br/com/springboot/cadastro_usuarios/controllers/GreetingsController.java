package br.com.springboot.cadastro_usuarios.controllers;

import org.springframework.http.HttpStatus;
import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RequestMethod;
import org.springframework.web.bind.annotation.ResponseStatus;
import org.springframework.web.bind.annotation.RestController;

/**
 *
 * A sample greetings controller to return greeting text
 */
@RestController
public class GreetingsController {
   
	
    @RequestMapping(value = "/mostrarnome/{name}", method = RequestMethod.GET)
    @ResponseStatus(HttpStatus.OK)
    public String greetingText(@PathVariable String name) {
        return "Spring Boot API " + name + "!";
    }
    
    @RequestMapping(value = "/olamundo/{name}", method = RequestMethod.GET)
    @ResponseStatus(HttpStatus.OK)
    public String retornaOlaMundo(@PathVariable String name) {
    	return "Olamundo "+ name;
    	
    }
    
    
    	
}
