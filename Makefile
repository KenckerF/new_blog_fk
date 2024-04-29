
.DEFAULT_GOAL := help

help: ## Show this help
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | awk 'BEGIN {FS = ":.*?## "}; {printf "%-20s %s\n", $$1, $$2}'

ssh-connect: ## .
	ssh flavien@51.254.116.84

ssh-connect-root: ## .
	ssh flavien_sudo@51.254.116.84