from twisted.internet import task, reactor
import MySQLdb
import time
import random
import yagmail

#---Begin Var Assignment---#

#SQL Auth Info
host = ''
username = ''
passwd = ''
db = ''

#Gmail Auth Info
gm_usr = ''
gm_pw = ''

#Statistics Info
totalcycles = 0
totalsends = 0

#Loop Repeat Delay
timeout = 60.0

#---End Var Assignment---#

#Begin Func Declaration
def send_email(user, pwd, recipient, subject, body):
    FROM = user
    TO = recipient if isinstance(recipient, list) else [recipient]
    SUBJECT = subject
    TEXT = body

    try:
        yag = yagmail.SMTP(user, pwd)
        contents = body
        yag.send(recipient, subject, contents)
        
    except:
        print ("Failed to send mail! Oh Noes")
    return

def sql(query):
	#This Function facilitates simple SQL queries with no Variables. For Example SELECT queries
	conn = MySQLdb.connect(host, username, passwd, db)
	cursor = conn.cursor()
	cursor.execute(query)
	result = cursor.fetchall()
	conn.commit()
	conn.close()
	return result


def sqlVars(query, vars):
	#This Function facilitates more complex SQL calls that include Variables. For Example INSERT statements with WHERE clauses
	conn = MySQLdb.connect(host, username, passwd, db)
	cursor = conn.cursor()
	cursor.execute(query, [vars])
	result = cursor.fetchall()
	conn.commit()
	conn.close()
	return result

def execute():

	#Global Var Declaration
	global totalsends, totalcycles

	#Main Loop Function
	epoch_time = int(time.time())
	starttext = f"""
----------Starting New Loop----------
	Time = {epoch_time}
	"""
	sendcycle = 0
	
	print(starttext)

	events = sql('SELECT * FROM events')


	for event in events:
		#for each event, get vars
		eid = event[0]
		name = event[1]
		freq = event[3]
		last = event[4]
		nextevent = event[5]
		desc = event[2]

		#from those vars, derive vars
		timeRemainEpoch = nextevent - epoch_time 
		timeRemainMin = timeRemainEpoch / 60
		timeRemainMin = round(timeRemainMin, 2)
		totalcycles = totalcycles + 1

		emailBody = f"""
					Taranis, Lord of Thunder summons you to Battle!

					Event: {name}
					Description: {desc}
					Alert in: {timeRemainMin} Minutes

					Notification incorrect? Reply to this email! Be sure to mention event code {eid} and how long it was off!
					
					Toss a coin to your coder mayhaps? paypal.me/jmacmcnerney
					"""

		if timeRemainEpoch <= 600:
			if timeRemainEpoch > 0:
				
				subusers = sqlVars('SELECT uid FROM subscriptions WHERE eid=%s AND value=0', eid)
				#return User IDs from the subscription table for the pending event

				for user in subusers:
					print(user)
					info = sqlVars('SELECT * FROM users WHERE id=%s', subusers[0])
					#return User Information from UID

					email = info[0]
					topic = f"Taranis Alert for Event#{eid}"
					#generate Email Subject Header

					sendcycle = sendcycle + 1
					totalsends = totalsends +1

					send_email(gm_usr, gm_pw, email[1], topic, emailBody)
					#send the Email!
					print(f'Alerted {email[1]} to {eid}')
					#log to Console

					update = sqlVars('UPDATE events SET next=0 WHERE eid=%s', eid)
					#reset SQL row to zero

					newVals = sqlVars('SELECT * FROM events WHERE eid=%s', eid)
					#return reset values for logging purposes


	if sendcycle == 0:
		print('No sends this cycle :(')
	else:
		print(f"{sendcycle} sends this cycle. \n")
#---End Func Declaration---#

#Binds Mainloop Function to systemclock without drift due to execution time. Dunno how it works, copypasta from Stackoverflow  ¯\_(ツ)_/¯
l = task.LoopingCall(execute)
l.start(timeout) #

reactor.run()
