# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: nihuynh <nihuynh@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2019/01/12 11:45:24 by nihuynh           #+#    #+#              #
#    Updated: 2019/03/29 14:57:39 by aquan            ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

IP		=	http://localhost:8080/j04
PATH	=	~/Users/aquan/PHP_github/j04

all : ex00 ex01 ex02 ex03
.PHONY : all

ex00 :
	/bin/rm -f $(PATH)/cook.txt
	curl -v -c cook.txt '$(IP)/$@/index.php'
	curl -v -b cook.txt '$(IP)/$@/index.php?login=sb&passwd=beeone&submit=OK'
	curl -v -b cook.txt '$(IP)/$@/index.php'
	curl -v '$(IP)/ex00/index.php'
.PHONY : ex00

ex01 :
	/bin/rm -rf $(PATH)/private
	curl -d login=toto1 -d passwd=titi1 -d submit=OK '$(IP)/$@/create.php'
	/bin/cat $(PATH)/private/passwd
	@echo '/n'
	curl -d login=toto1 -d passwd=titi1 -d submit=OK '$(IP)/$@/create.php'
	curl -d login=toto2 -d passwd= -d submit=OK '$(IP)/$@/create.php'
.PHONY : ex01

ex02 :
	/bin/rm -rf $(PATH)/private
	curl -d login=x -d passwd=21 -d submit=OK '$(IP)/ex01/create.php'
	/bin/cat $(PATH)/private/passwd
	@echo '/n'
	curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK '$(IP)/$@/modif.php'
	/bin/cat $(PATH)/private/passwd
	@echo '/n'
	curl -d login=x -d oldpw=21 -d newpw=42 -d submit=OK '$(IP)/$@/modif.php'
	curl -d login=x -d oldpw=42 -d newpw= -d submit=OK '$(IP)/$@/modif.php'
.PHONY : ex02

ex03 :
	/bin/rm -rf $(PATH)/private
	curl -d login=toto -d passwd=titi -d submit=OK '$(IP)/ex01/create.php'
	curl '$(IP)/$@/login.php?login=toto&passwd=titi'
	@make clean
	curl -d login=toto -d passwd=titi -d submit=OK '$(IP)/ex01/create.php'
	curl -c cook.txt '$(IP)/$@/login.php?login=toto&passwd=titi'
	curl -b cook.txt '$(IP)/$@/whoami.php'
	curl -b cook.txt '$(IP)/$@/logout.php'
	curl -b cook.txt '$(IP)/$@/whoami.php'
	@make clean
.PHONY : ex03

clean :
	/bin/rm -rf $(PATH)/private
	/bin/rm -f $(PATH)/cook.txt
.PHONY : clean
