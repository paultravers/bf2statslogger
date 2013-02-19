# ------------------------------------------------------------------------------
# BF2Statistics 1.4 - Config File
# ------------------------------------------------------------------------------
# Conventions:
#    0 -> Disable
#    1 -> Enable
# ------------------------------------------------------------------------------

# ------------------------------------------------------------------------------
# Debug Logging
# ------------------------------------------------------------------------------
debug_enable = 0	
debug_log_path = 'python/bf2/logs'		# Relative from BF2 base folder
debug_fraglog_enable = 0				# Detailed 'Fragalyzer' Logs

# ------------------------------------------------------------------------------
# Backend Web Server
# ------------------------------------------------------------------------------
http_backend_addr = '127.0.0.1'
http_backend_port = 80
http_backend_asp = '/ASP/bf2statistics.php'

# ------------------------------------------------------------------------------
# Snapshot Manager
# ------------------------------------------------------------------------------
snapshot_prefix = 'BF2'		# Prefix Snapshots with this tag

# ------------------------------------------------------------------------------
# Medals Processing
# ------------------------------------------------------------------------------
medals_custom_data = ''		# Suffix for your custom medals file(s)

# ------------------------------------------------------------------------------
# Player Manager
# ------------------------------------------------------------------------------
pm_backend_pid_manager = 1
pm_local_pid_txt_file = 'python/bf2/pid.txt'	# Relative from BF2 base folder
pm_ai_player_addr = '127.0.0.1'		# Not recommended to change


# ------------------------------------------------------------------------------
# Clan Manager
# ------------------------------------------------------------------------------
enableClanManager = 0	# Use the Clan Manager to control Access to your server!
serverMode = 0
	# Mode 1: Clan ONLY (Must be on Clan List to Join Server)
	# Mode 2: Priority Proving Grounds (Clan Members AND those players that meet
	#	the minimum requirements.Clan Members get priority)
	# Mode 3: Proving Grounds (Clan Members AND those players that meet the
	#	minimum requirements)
	# Mode 4: Experts ONLY (Only players that meet the minimum requirements)
	# Mode 0: Public (Free-for-All. No Restrictions!)

# Clan Manager Criteria
criteria_data = (
		('clantag', ''),	# Clan Tag (Matches First Part of Player Name, used for Whitelist)
		('score',	0),		# Minimum Global Score
		('rank',	0),		# Minimum Global Rank
		('time',	0),		# Minimum Global Time Played
		('kdratio',	0),		# Minimum Global Kill/Death Ratio
		('country',	''),	# Registered Country of Origin Code (Seperate multiple by comma ',')
		('banned',	10),	# Maximum banned count! PermBan is ALWAY BlackListed
	)

# ------------------------------------------------------------------------------
# Backup Central Community Web Server (OPTIONAL)
# ------------------------------------------------------------------------------
http_central_enable = 0				# Use settings above (0, 1, 2)
http_central_addr = 'cbd.xxx.aaa'	#Address Central STATS Server
http_central_port = 80
http_central_asp = '/ASP/bf2statistics.php'

# Note: this cabalility is for linking stats data to a centrally maintained STATS #
#   server.  This could be useful for those who are running a LAN or Tournament   #
#   (with local STATS), but wish to have this data credited to their normal STATS #
#   DB. There are three (3) options for the central DB update:                    #
#     0: Disabled - 'nuff said!                                                   #
#     1: Sync  - This simply copies the SNAPSHOT as-is to the central DB          #
#     2: Minimal - Record everything, except Rank & Award data (typically use     #
#				for LANs or Tournaments where local db starts blank)              #

# ------------------------------------------------------------------------------
# END CONFIGURATION
# ------------------------------------------------------------------------------
